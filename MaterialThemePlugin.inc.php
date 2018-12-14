<?php
import('classes.plugins.ThemePlugin');
class MaterialThemePlugin extends ThemePlugin
{
    function getName()
    {
        return 'MaterialThemePlugin';
    }
    function getDisplayName()
    {
        return 'Material Theme';
    }
    function getDescription()
    {
        return 'Material Design theme';
    }
    function getStylesheetFilename()
    {
        return 'style.css';
    }
    function getLocaleFilename($locale)
    {
        return null;
    }
}
