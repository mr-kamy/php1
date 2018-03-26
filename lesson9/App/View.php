<?php

namespace App;


class View
{
    protected $data = [];

    public function assign(string $name, $value)
    {
        $this->data[$name] = $value;
    }

    public function render(string $template)
    {
        ob_start();
        if (!empty($this->data)) {
            foreach ($this->data as $name => $value) {
                $$name = $value;
            }
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display(string $template)
    {
        echo $this->render($template);
    }

}