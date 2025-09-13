<?php
class Application {
    private Button $button;
    private Checkbox $checkbox;

    public function __construct(GUIFactory $factory) {
        $this->button = $factory->createButton();
        $this->checkbox = $factory->createCheckbox();
    }

    public function renderUI() {
        $this->button->render();
        $this->checkbox->render();
    }
}