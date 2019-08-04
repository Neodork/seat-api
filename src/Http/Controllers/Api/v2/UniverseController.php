<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015, 2016, 2017, 2018, 2019  Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

namespace Seat\Api\Http\Controllers\Api\v2;

use Seat\Api\Http\Resources\AssetResource;
use Seat\Api\Http\Resources\BookmarkResource;
use Seat\Api\Http\Resources\CharacterSheetResource;
use Seat\Api\Http\Resources\ContactResource;
use Seat\Api\Http\Resources\ContractResource;
use Seat\Api\Http\Resources\CorporationHistoryResource;
use Seat\Api\Http\Resources\IndustryResource;
use Seat\Api\Http\Resources\JumpcloneResource;
use Seat\Api\Http\Resources\KillmailResource;
use Seat\Api\Http\Resources\MailResource;
use Seat\Api\Http\Resources\MarketOrderResource;
use Seat\Api\Http\Resources\NotificationResource;
use Seat\Api\Http\Resources\SkillQueueResource;
use Seat\Api\Http\Resources\SkillsResource;
use Seat\Api\Http\Resources\UniverseStructureResource;
use Seat\Api\Http\Resources\WalletJournalResource;
use Seat\Api\Http\Resources\WalletTransactionResource;
use Seat\Eveapi\Models\Assets\CharacterAsset;
use Seat\Eveapi\Models\Bookmarks\CharacterBookmark;
use Seat\Eveapi\Models\Character\CharacterCorporationHistory;
use Seat\Eveapi\Models\Character\CharacterInfo;
use Seat\Eveapi\Models\Character\CharacterNotification;
use Seat\Eveapi\Models\Character\CharacterSkill;
use Seat\Eveapi\Models\Clones\CharacterJumpClone;
use Seat\Eveapi\Models\Contacts\CharacterContact;
use Seat\Eveapi\Models\Contracts\CharacterContract;
use Seat\Eveapi\Models\Industry\CharacterIndustryJob;
use Seat\Eveapi\Models\Killmails\CharacterKillmail;
use Seat\Eveapi\Models\Mail\MailHeader;
use Seat\Eveapi\Models\Market\CharacterOrder;
use Seat\Eveapi\Models\Skills\CharacterSkillQueue;
use Seat\Eveapi\Models\Universe\UniverseStructure;
use Seat\Eveapi\Models\Wallet\CharacterWalletJournal;
use Seat\Eveapi\Models\Wallet\CharacterWalletTransaction;

/**
 * Class CharacterController.
 *
 * @package  Seat\Api\v2
 */
class UniverseController extends ApiController
{

    public function getStructure(int $structure_id)
    {
      return UniverseStructureResource::collection(UniverseStructure::where('structure_id', $structure_id)->get());
    }
}
