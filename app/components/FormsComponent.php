<?php


namespace app\components;


use app\base\Component;
use app\database\tables\SponsorshipRequestTable;
use app\database\tables\TeamRequestTable;
use app\model\SponsorshipForm;
use app\model\TeamForm;

class FormsComponent extends Component
{
    /**
     * @param $form TeamForm
     * @return bool
     */
    public function joinTeam($form)
    {
        $table = new TeamRequestTable();

        return $table->insert($form);
    }

    /**
     * @param $form SponsorshipForm
     * @return bool
     */
    public function joinSponsorship($form)
    {
        $table = new SponsorshipRequestTable();

        return $table->insert($form);
    }
}