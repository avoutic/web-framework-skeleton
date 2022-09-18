<?php
namespace App\Actions;

use WebFramework\Core\PageAction;

class Main extends PageAction
{
    public function get_title(): string
    {
        return 'Hello World';
    }

    public function do_logic(): void
    {
        $this->page_content['some_value'] = 'Use this';
    }

    public function display_content(): void
    {
        $this->load_template('main.tpl', $this->page_content);
    }
};
?>
