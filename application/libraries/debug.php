<?php

/**
 * @author Evin Weissenberg
 */
class Debug {

    private $variable;
    private $title;

    /**
     * @param $variable
     * @return Debug
     */
    function setVariable($variable) {

        $this->variable = $variable;
        return $this;

    }

    /**
     * @param $title
     * @return Debug
     */
    function setTitle($title) {

        $this->title = (string)$title;
        return $this;

    }

    /**
     *
     */
    function debug() {

        if (ENVIRONMENT == 'production') {

            return FALSE;
        }


        print('<pre style="color:green;">');
        print("<h1>" . $this->title . "</h1>");
        print_r($this->variable);
        print('</pre>');

    }

    /**
     *
     */
    function __destruct() {

        unset($this->variable);

    }
}
//Usage
//(new Debug())->setTitle('My Var')->setVariable($_REQUEST)->debug();