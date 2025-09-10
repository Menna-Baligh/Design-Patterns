<?php
abstract class Juicer {
    abstract public function makeJuice(): Juice;  // Factory Method

    public function serveJuice() {
        $juice = $this->makeJuice(); 
        $juice->drink();
    }
}