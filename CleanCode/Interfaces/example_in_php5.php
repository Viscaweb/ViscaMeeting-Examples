<?php

interface Motor
{
    /**
     * @param int $speed
     *
     * @return bool
     * @throws MotorIsBroken
     */
    public function speedUp($speed);

    /**
     * @param int $speed
     *
     * @return bool
     * @throws MotorIsBroken
     */
    public function slowDown($speed);

    /**
     * @return int
     */
    public function getCurrentSpeed();
}