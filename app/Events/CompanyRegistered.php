<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class CompanyRegistered
{
    use SerializesModels;

    /**
     * The registered company.
     *
     * @var \App\Models\Company
     */
    public $company;

    /**
     * Create a new event instance.
     *
     * @param  \App\Models\Company  $company
     * @return void
     */
    public function __construct($company)
    {
        $this->company = $company;
    }
}
