<?php

namespace core_user\output\myprofile;

use core_user\output\myprofile\renderer;

class theme_chesu_myprofile_renderer extends renderer
{
    /**
     * Render the whole tree.
     *
     * @param tree $tree
     *
     * @return string
     */
    public function render_tree(tree $tree)
    {
        $return = \html_writer::start_tag('div', array('class' => 'profile_tree'));
        $categories = $tree->categories;
        foreach ($categories as $category) {
            $return .= $this->render($category);
        }
        $return .= \html_writer::end_tag('div');
        return '<h1>YUP</h1>' . $return;
    }
}
