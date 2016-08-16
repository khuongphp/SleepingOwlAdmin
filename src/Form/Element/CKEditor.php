<?php

namespace SleepingOwl\Admin\Form\Element;

use SleepingOwl\Admin\Contracts\Template\TemplateInterface;
use SleepingOwl\Admin\Contracts\Wysiwyg\WysiwygMangerInterface;

class CKEditor extends Wysiwyg
{

    /**
     * @var string
     */
    protected $view = 'form.element.wysiwyg';

    /**
     * @param TemplateInterface $template
     * @param WysiwygMangerInterface $manger
     * @param string $path
     * @param string|null $label
     */
    public function __construct(TemplateInterface $template, WysiwygMangerInterface $manger, $path, $label = null)
    {
        parent::__construct($template, $manger, $path, $label, 'ckeditor');
    }
}
