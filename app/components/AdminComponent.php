<?php


namespace app\components;


use app\base\Component;
use app\database\tables\PagesTable;
use app\database\tables\SponsorshipRequestTable;
use app\database\tables\TeamRequestTable;
use app\database\tables\TeamTable;

class AdminComponent extends Component
{
    private $pagesTable;
    private $teamRequestTable;
    private $sponsorshipRequestTable;
    private $teamTable;

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

    public function getTeam()
    {
        $this->teamTable = new TeamTable();

        return $this->teamTable->getAll();
    }
}