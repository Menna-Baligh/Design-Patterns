<?php
class ApplicationConfigurator {
    public static function configure(string $os): Application {
        if ($os === "Windows") {
            $factory = new WinFactory();
        } elseif ($os === "Mac") {
            $factory = new MacFactory();
        } else {
            throw new Exception("Unsupported OS");
        }

        return new Application($factory);
    }
}