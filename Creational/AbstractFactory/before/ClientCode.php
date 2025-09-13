<?php
include 'Button.php' ;
include 'Checkbox.php' ;
include 'MacButton.php' ;
include 'MacCheckbox.php' ;
include 'WinButton.php' ;
include 'WinCheckbox.php' ;
class Application {
    private Button $button;
    private Checkbox $checkbox;

    public function __construct(string $os) {
        if ($os === "Windows") {
            $this->button = new WinButton();
            $this->checkbox = new WinCheckbox();
        } elseif ($os === "Mac") {
            $this->button = new MacButton();
            $this->checkbox = new MacCheckbox();
        } else {
            throw new Exception("Unsupported OS");
        }
    }

    public function renderUI() {
        $this->button->render();
        $this->checkbox->render();
    }
}

//* test
$app = new Application("Windows");
$app->renderUI();

$app = new Application("Mac");
$app->renderUI();