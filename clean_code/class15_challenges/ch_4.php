<?php

interface ConsultantInterface
{
    public function program();
    public function filetps();
}

interface UnderlingInterface
{
    public function collate();
}

class Underling implements ConsultantInterface, UnderlingInterface
{
    public function program()
    {
        return 'Program initech systems to deposit fractions of pennies to private account';
    }

    public function filetps()
    {
        return 'Place cover sheet on TPS report before going out';
    }

    public function collate()
    {
        return 'Collect and combine texts, information, and figures in proper order.';
    }
}

class Consultant implements ConsultantInterface
{
    public function program()
    {
        return 'Outsource task to India';
    }

    public function filetps()
    {
        return 'Place cover sheet on TPS report before going out';
    }
}

class Lumbergh
{
    protected $underling;

    public function __construct(Underling $underling)
    {
        $this->underling = $underling;
    }

    public function harass()
    {
        $this->underling->program();
        $this->underling->filetps();
        $this->underling->collate();
    }
}
