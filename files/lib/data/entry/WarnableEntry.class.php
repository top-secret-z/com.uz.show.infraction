<?php

/*
 * Copyright by Udo Zaydowicz.
 * Modified by SoftCreatR.dev.
 *
 * License: http://opensource.org/licenses/lgpl-license.php
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program; if not, write to the Free Software Foundation,
 * Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */
namespace show\data\entry;

use wcf\data\DatabaseObjectDecorator;
use wcf\data\TUserContent;
use wcf\system\infraction\warning\IWarnableObject;

/**
 * Warnable object implementation for Display Window entries.
 */
class WarnableEntry extends DatabaseObjectDecorator implements IWarnableObject
{
    use TUserContent;

    /**
     * @inheritDoc
     */
    protected static $baseClass = Entry::class;

    /**
     * @inheritDoc
     */
    public function getLink()
    {
        return $this->getDecoratedObject()->getLink();
    }

    /**
     * @inheritDoc
     */
    public function getObjectID()
    {
        return $this->entryID;
    }

    /**
     * @inheritDoc
     */
    public function getTitle()
    {
        return $this->getDecoratedObject()->getTitle();
    }
}
