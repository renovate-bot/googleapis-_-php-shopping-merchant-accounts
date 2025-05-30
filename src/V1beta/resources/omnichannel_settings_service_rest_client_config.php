<?php
/*
 * Copyright 2025 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

return [
    'interfaces' => [
        'google.shopping.merchant.accounts.v1beta.OmnichannelSettingsService' => [
            'CreateOmnichannelSetting' => [
                'method' => 'post',
                'uriTemplate' => '/accounts/v1beta/{parent=accounts/*}/omnichannelSettings',
                'body' => 'omnichannel_setting',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetOmnichannelSetting' => [
                'method' => 'get',
                'uriTemplate' => '/accounts/v1beta/{name=accounts/*/omnichannelSettings/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListOmnichannelSettings' => [
                'method' => 'get',
                'uriTemplate' => '/accounts/v1beta/{parent=accounts/*}/omnichannelSettings',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'RequestInventoryVerification' => [
                'method' => 'post',
                'uriTemplate' => '/accounts/v1beta/{name=accounts/*/omnichannelSettings/*}:requestInventoryVerification',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'UpdateOmnichannelSetting' => [
                'method' => 'patch',
                'uriTemplate' => '/accounts/v1beta/{omnichannel_setting.name=accounts/*/omnichannelSettings/*}',
                'body' => 'omnichannel_setting',
                'placeholders' => [
                    'omnichannel_setting.name' => [
                        'getters' => [
                            'getOmnichannelSetting',
                            'getName',
                        ],
                    ],
                ],
                'queryParams' => [
                    'update_mask',
                ],
            ],
        ],
    ],
    'numericEnums' => true,
];
