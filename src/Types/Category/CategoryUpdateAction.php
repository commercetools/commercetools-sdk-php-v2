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
        'changeSlug' => Types\Category\CategoryChangeSlugAction::class,
        'setCustomType' => Types\Category\CategorySetCustomTypeAction::class,
        'setKey' => Types\Category\CategorySetKeyAction::class,
        'changeName' => Types\Category\CategoryChangeNameAction::class,
        'setAssetSources' => Types\Category\CategorySetAssetSourcesAction::class,
        'setMetaTitle' => Types\Category\CategorySetMetaTitleAction::class,
        'setCustomField' => Types\Category\CategorySetCustomFieldAction::class,
        'setAssetKey' => Types\Category\CategorySetAssetKeyAction::class,
        'removeAsset' => Types\Category\CategoryRemoveAssetAction::class,
        'setDescription' => Types\Category\CategorySetDescriptionAction::class,
        'changeParent' => Types\Category\CategoryChangeParentAction::class,
        'setAssetCustomField' => Types\Category\CategorySetAssetCustomFieldAction::class,
        'setMetaDescription' => Types\Category\CategorySetMetaDescriptionAction::class,
        'setAssetTags' => Types\Category\CategorySetAssetTagsAction::class,
        'changeOrderHint' => Types\Category\CategoryChangeOrderHintAction::class,
        'changeAssetOrder' => Types\Category\CategoryChangeAssetOrderAction::class,
        'setAssetCustomType' => Types\Category\CategorySetAssetCustomTypeAction::class,
        'changeAssetName' => Types\Category\CategoryChangeAssetNameAction::class,
        'addAsset' => Types\Category\CategoryAddAssetAction::class,
        'setMetaKeywords' => Types\Category\CategorySetMetaKeywordsAction::class,
        'setExternalId' => Types\Category\CategorySetExternalIdAction::class,
        'setAssetDescription' => Types\Category\CategorySetAssetDescriptionAction::class,

    ];

}
