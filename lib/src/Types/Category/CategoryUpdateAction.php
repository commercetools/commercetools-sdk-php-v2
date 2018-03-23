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
        'changeName' => Types\Category\CategoryChangeNameAction::class,
        'setAssetSources' => Types\Category\CategorySetAssetSourcesAction::class,
        'setCustomType' => Types\Category\CategorySetCustomTypeAction::class,
        'addAsset' => Types\Category\CategoryAddAssetAction::class,
        'setAssetCustomType' => Types\Category\CategorySetAssetCustomTypeAction::class,
        'changeParent' => Types\Category\CategoryChangeParentAction::class,
        'setKey' => Types\Category\CategorySetKeyAction::class,
        'setMetaKeywords' => Types\Category\CategorySetMetaKeywordsAction::class,
        'setAssetKey' => Types\Category\CategorySetAssetKeyAction::class,
        'setAssetCustomField' => Types\Category\CategorySetAssetCustomFieldAction::class,
        'setAssetTags' => Types\Category\CategorySetAssetTagsAction::class,
        'setMetaDescription' => Types\Category\CategorySetMetaDescriptionAction::class,
        'changeOrderHint' => Types\Category\CategoryChangeOrderHintAction::class,
        'changeAssetOrder' => Types\Category\CategoryChangeAssetOrderAction::class,
        'setDescription' => Types\Category\CategorySetDescriptionAction::class,
        'setAssetDescription' => Types\Category\CategorySetAssetDescriptionAction::class,
        'changeAssetName' => Types\Category\CategoryChangeAssetNameAction::class,
        'setMetaTitle' => Types\Category\CategorySetMetaTitleAction::class,
        'setExternalId' => Types\Category\CategorySetExternalIdAction::class,
        'setCustomField' => Types\Category\CategorySetCustomFieldAction::class,
        'removeAsset' => Types\Category\CategoryRemoveAssetAction::class,
        'changeSlug' => Types\Category\CategoryChangeSlugAction::class,

    ];

}
