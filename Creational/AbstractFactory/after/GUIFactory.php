<?php
// Abstract Factory
interface GUIFactory {
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}