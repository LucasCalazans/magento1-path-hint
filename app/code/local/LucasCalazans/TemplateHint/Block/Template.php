<?php

class LucasCalazans_TemplateHint_Block_Template extends Mage_Core_Block_Template {

    public function getShowTemplateHints() {
        parent::getShowTemplateHints();

        if(isset($_GET['enablepath'])) {
            self::$_showTemplateHints = true;
            if($_GET['enablepath'] == 1) self::$_showTemplateHintsBlocks = true;
        }

        return self::$_showTemplateHints;
    }
}