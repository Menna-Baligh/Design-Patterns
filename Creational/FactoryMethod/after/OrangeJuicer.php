<?php
class OrangeJuicer extends Juicer {
    public function makeJuice(): Juice {
        return new OrangeJuice();
    }
}