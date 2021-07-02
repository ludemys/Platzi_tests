<?php
class Programmer
{
    public function work()
    {
        return 'coding';
    }
}
class Tester
{
    public function work()
    {
        return 'Testing';
    }
}
class ProjectManagement
{
    public function process($member)
    {
        $member->work();
    }
}
