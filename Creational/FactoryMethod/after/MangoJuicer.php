<?php
class MangoJuicer extends Juicer {
    public function makeJuice(): Juice {
        return new MangoJuice();
    }
}