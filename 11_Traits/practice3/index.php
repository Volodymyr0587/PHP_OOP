<?php 

require_once "Robot.php";
require_once "Drone.php";

class FlyingRobot
{
    use DroneTrait, RobotTrait{
        DroneTrait::setMaxSpeed insteadof RobotTrait;
        DroneTrait::getMaxSpeed insteadof RobotTrait;
        DroneTrait::setMaxSpeed as setFlyingMaxSpeed;
        DroneTrait::getMaxSpeed as getFlyingMaxSpeed;
        RobotTrait::setMaxSpeed as setRunnigMaxSpeed;
        RobotTrait::getMaxSpeed as getRunnigMaxSpeed;
    }

    public function __construct($maxRunningSpeed, $maxWalkingTime,
                                $maxFlyingSpeed, $maxFlyingTime)
    {
        $this->maxWalkingTime = $maxWalkingTime;
        $this->maxFlyingTime = $maxFlyingTime;
        $this->setFlyingMaxSpeed($maxFlyingSpeed);
        $this->setRunnigMaxSpeed($maxRunningSpeed);
    }
}

$flyingRobot = new FlyingRobot(40, 120, 60, 30);
echo $flyingRobot->getMaxFlyingTime();
echo "<br>";
echo $flyingRobot->getRunnigMaxSpeed();