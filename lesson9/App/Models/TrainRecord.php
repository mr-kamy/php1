<?php

namespace App\Models;


class TrainRecord
{
    public $id;
    public $train;
    public $arrival;
    public $departure;
    public $appointment;

    public function __construct($id, $train, $arrival, $departure, $appointment)
    {
        $this->id = $id;
        $this->train = $train;
        $this->arrival = $arrival;
        $this->departure = $departure;
        $this->appointment = $appointment;
    }

}