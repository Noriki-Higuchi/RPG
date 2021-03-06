<?php

declare(strict_types=1);

class WhiteMage extends Human
{
    const MAX_HIT_POINT = 80;
    private int $hitPoint = self::MAX_HIT_POINT;
    private int $attackPoint = 10;
    private int $intelligence = 30;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint);
    }

    public function doAttackWhiteMage(object $enemy, object $member): void
    {
        if (rand(1, 2) === 1) {
            echo '「' . $this->getName() . '」のスキルが発動' . PHP_EOL;
            echo '「' . $member->getName() . '」のHPが' . $this->intelligence . '回復' . PHP_EOL;
            echo PHP_EOL;
            $member->recoveryDamage($this->intelligence, $member);
        } else {
            parent::doAttack($enemy);
        }
    }
}
