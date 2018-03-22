<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface CategoryUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeParent' => Types\Category\CategoryChangeParentAction::class,
        'setCustomField' => Types\Category\CategorySetCustomFieldAction::class,
        'setExternalId' => Types\Category\CategorySetExternalIdAction::class,
        'changeAssetOrder' => Types\Category\CategoryChangeAssetOrderAction::class,
        'setAssetKey' => Types\Category\CategorySetAssetKeyAction::class,
        'setMetaKeywords' => Types\Category\CategorySetMetaKeywordsAction::class,
        'setAssetTags' => Types\Category\CategorySetAssetTagsAction::class,
        'setAssetDescription' => Types\Category\CategorySetAssetDescriptionAction::class,
        'setCustomType' => Types\Category\CategorySetCustomTypeAction::class,
        'setMetaTitle' => Types\Category\CategorySetMetaTitleAction::class,
        'changeSlug' => Types\Category\CategoryChangeSlugAction::class,
        'changeOrderHint' => Types\Category\CategoryChangeOrderHintAction::class,
        'removeAsset' => Types\Category\CategoryRemoveAssetAction::class,
        'setKey' => Types\Category\CategorySetKeyAction::class,
        'setAssetSources' => Types\Category\CategorySetAssetSourcesAction::class,
        'changeName' => Types\Category\CategoryChangeNameAction::class,
        'changeAssetName' => Types\Category\CategoryChangeAssetNameAction::class,
        'setAssetCustomField' => Types\Category\CategorySetAssetCustomFieldAction::class,
        'addAsset' => Types\Category\CategoryAddAssetAction::class,
        'setMetaDescription' => Types\Category\CategorySetMetaDescriptionAction::class,
        'setDescription' => Types\Category\CategorySetDescriptionAction::class,
        'setAssetCustomType' => Types\Category\CategorySetAssetCustomTypeAction::class,

    ];

}
