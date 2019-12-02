<?php


namespace app\components;


use app\base\Component;
use app\database\tables\AdminsTable;
use app\database\tables\PagesTable;
use app\database\tables\SponsorshipRequestTable;
use app\database\tables\TeamRequestTable;
use app\database\tables\TeamTable;
use app\model\Team;

class AdminComponent extends Component
{
    private $pagesTable;
    private $teamRequestTable;
    private $sponsorshipRequestTable;
    private $teamTable;
    private $adminsTable;

    public function getPagesList()
    {
        $this->pagesTable = new PagesTable();

        return $this->pagesTable->getAll();
    }

    public function getTeamRequests()
    {
        $this->teamRequestTable = new TeamRequestTable();

        return $this->teamRequestTable->getAll();
    }

    public function getSponsorshipRequests()
    {
        $this->sponsorshipRequestTable = new SponsorshipRequestTable();

        return $this->sponsorshipRequestTable->getAll();
    }

    public function addTeam($name, $department, $position, $positionNumber, $file)
    {
        $this->teamTable = new TeamTable();
        $fileComponent = new FileComponent();

        $filename = $fileComponent->addImage($file);

        $team = new Team($name, $department, $position, $positionNumber, $filename);

        if (!$this->teamTable->updatePositionNumber($positionNumber))
            return null;

        return $this->teamTable->insert($team);
    }

    public function updateTeam($id, $name, $department, $position, $positionNumber, $file)
    {
        $this->teamTable = new TeamTable();
        $fileComponent = new FileComponent();

        $filename = $fileComponent->addImage($file);
        if (isset($filename)) {
            $team = new Team($name, $department, $position, $positionNumber, $filename);

            return $this->teamTable->update('id', $id, [
                'name' => $name,
                'department' => $department,
                'position' => $position,
                'position_number' => $positionNumber,
                'photo' => $filename
            ]);
        }
        else {
            $team = new Team($name, $department, $position, $positionNumber);

            return $this->teamTable->update('id', $id, [
                'name' => $name,
                'department' => $department,
                'position' => $position,
                'position_number' => $positionNumber
            ]);
        }
    }

    public function deleteTeam($id)
    {
        $this->teamTable = new TeamTable();

        return $this->teamTable->deleteByCondition('id', $id);
    }

    public function getTeam()
    {
        $this->teamTable = new TeamTable();

        return $this->teamTable->getAll();
    }

    public function getOneTeam($id)
    {
        $this->teamTable = new TeamTable();

        return $this->teamTable->getByCondition('id', $id)[0];
    }

    public function getAdmins()
    {
        $this->adminsTable = new AdminsTable();

        return $this->adminsTable->getAdminsList();
    }
}