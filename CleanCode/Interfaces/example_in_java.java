interface Motor
{
    public boolean speedUp(int speed) throws MotorIsBroken;

    public function slowDown(int speed) throws MotorIsBroken;

    public function getCurrentSpeed() throws MotorIsBroken;
}