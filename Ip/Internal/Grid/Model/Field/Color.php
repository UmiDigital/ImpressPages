<?php
/**
 * @package   ImpressPages
 */

namespace Ip\Internal\Grid\Model\Field;


class Color extends \Ip\Internal\Grid\Model\Field\Text
{

    public function createField()
    {
        $field = new \Ip\Form\Field\Color(array(
            'label' => $this->label,
            'name' => $this->field,
            'layout' => $this->layout
        ));
        $field->setValue($this->defaultValue);
        return $field;
    }

    public function updateField($curData)
    {
        $field = new \Ip\Form\Field\Color(array(
            'label' => $this->label,
            'name' => $this->field,
            'layout' => $this->layout
        ));
        $field->setValue($curData[$this->field]);
        return $field;
    }

}
