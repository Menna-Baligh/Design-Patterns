<?php
class Juicer {

    public function serveJuice($type) {

        if ($type === "orange") {
            $juice = new OrangeJuice();
        } elseif ($type === "mango") {
            $juice = new MangoJuice();
        } elseif ($type === "guava") {
            $juice = new GuavaJuice();
        } else {
            throw new Exception("Unknown juice type: $type");
        }

        $juice->drink();
    }
}