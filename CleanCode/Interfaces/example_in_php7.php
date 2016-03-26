<?php

interface Motor
{
    /**
     * @param int $speed
     *
     * @return bool
     * @throws MotorIsBroken
     */
    public function speedUp(int $speed): bool;

    /**
     * @param int $speed
     *
     * @return bool
     * @throws MotorIsBroken
     */
    public function slowDown(int $speed): bool;

    /**
     * @return int
     */
    public function getCurrentSpeed(): int;
}