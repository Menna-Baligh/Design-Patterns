<?php
class GuavaJuicer extends Juicer {
    public function makeJuice(): Juice {
        return new GuavaJuice();
    }
}