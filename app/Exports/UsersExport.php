<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

/**
 * Class is responsible for prepare the data as collection for export feature
 * @author Anand Malvi <anand.malvi@bytestechnolab.in>
 */
class UsersExport implements FromCollection, WithHeadings 
{
    /**
     * Class instance
     * @param   mixed $member
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     */
    public function __construct($member)
    {
        $this->results = $member;
    }

    /**
     * Responsible for set the sheet header
     * @author Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return array
     */
    public function headings(): array
    {
        return ($this->results['page'] == 'leads') ? $this->getLeadHeading() : $this->getCcpaHeading();   
    }

    /**
     * Responsible for return the response for create sheet
     * @author Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return mixed
     */
    public function collection()
    {
        $result = ($this->results['page'] == 'leads') ? $this->getLeadData() : $this->getCcpaData();
        return collect($result);
    }

    /**
     * Used to provide header fields for leads
     * @author Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return array
     */
    private function getLeadHeading() : array
    {
        return [
            'ID',
            'Created',
            'Current Situation',
            'Tax Debt',
            'Enrolled IRS',
            'First Name',
            'Last Name',
            'Email',
            'Phone',
            'State',
        ];
    }

    /**
     * Used to provide header fields for CCPA
     * @author Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return array
     */
    private function getCcpaHeading() : array
    {
        return [
            'ID',
            'Created',
            'Requestor',
            'Requestor Options',
            'First Name',
            'Last Name',
            'Address',
            'Email',
            'Phone',
        ];
    }

    /**
     * Provides the data for leads
     * @author Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return array
     */
    private function getLeadData() : array
    {
        $result = [];
        foreach ($this->results['data'] AS $data) {
            $result[] = [
                $data->id,
                $data->created_at,
                $data->current_sit,
                $data->tax_debt,
                $data->enrolled_irs,
                $data->first_name,
                $data->last_name,
                $data->email_address,
                $data->primary_phone,
                $data->state,
            ];
        }
        return $result;
    }

    /**
     * Get the CCPA prepared data
     * @return array
     */
    private function getCcpaData() : array
    {
        $result = [];
        foreach ($this->results['data'] AS $data) {
            $address = $data->street .' '. $data->apt .' '. $data->city .' '. $data->state .' '. $data->zip_code;
            $result[] = [
                $data->id,
                $data->created_at,
                $data->requestor,
                $data->requestoptions,
                $data->first_name,
                $data->last_name,
                $address,
                $data->email_address,
                $data->primary_phone,
            ];
        }
        return $result;
    }
}