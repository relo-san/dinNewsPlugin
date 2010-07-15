<?php

/*
 * This file is part of the dinNewsPlugin package.
 * (c) DineCat, 2010 http://dinecat.com/
 * 
 * For the full copyright and license information, please view the LICENSE file,
 * that was distributed with this package, or see http://www.dinecat.com/din/license.html
 */

/**
 * Plugin class for performing query and update operations for DinNewsCategory model table
 * 
 * @package     dinNewsPlugin
 * @subpackage  lib.model.doctrine
 * @author      Nicolay N. Zyk <relo.san@gmail.com>
 */
class PluginDinNewsCategoryTable extends dinDoctrineTable
{

    /**
     * Returns an instance of PluginDinNewsCategoryTable
     * 
     * @return  PluginDinNewsCategoryTable
     */
    public static function getInstance()
    {

        return Doctrine_Core::getTable( 'PluginDinNewsCategory' );

    } // PluginDinNewsCategoryTable::getInstance()

} // PluginDinNewsCategoryTable

//EOF