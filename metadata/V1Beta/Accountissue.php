<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/accountissue.proto

namespace GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta;

class Accountissue
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Shopping\Type\Types::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
;google/shopping/merchant/accounts/v1beta/accountissue.proto(google.shopping.merchant.accounts.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/shopping/type/types.proto"�
AccountIssue
name (	B�A
title (	Q
severity (2?.google.shopping.merchant.accounts.v1beta.AccountIssue.Severityi
impacted_destinations (2J.google.shopping.merchant.accounts.v1beta.AccountIssue.ImpactedDestination
detail (	
documentation_uri (	�
ImpactedDestination[
reporting_context (2;.google.shopping.type.ReportingContext.ReportingContextEnumH �b
impacts (2Q.google.shopping.merchant.accounts.v1beta.AccountIssue.ImpactedDestination.Impactp
Impact
region_code (	Q
severity (2?.google.shopping.merchant.accounts.v1beta.AccountIssue.SeverityB
_reporting_context"M
Severity
SEVERITY_UNSPECIFIED 
CRITICAL	
ERROR

SUGGESTION:l�Ai
\'merchantapi.googleapis.com/AccountIssue!accounts/{account}/issues/{issue}*accountIssues2accountIssue"�
ListAccountIssuesRequest:
parent (	B*�A�A$
"merchantapi.googleapis.com/Account
	page_size (B�A

page_token (	B�A
language_code (	B�A
	time_zone (	B�A"�
ListAccountIssuesResponseN
account_issues (26.google.shopping.merchant.accounts.v1beta.AccountIssue
next_page_token (	2�
AccountIssueService�
ListAccountIssuesB.google.shopping.merchant.accounts.v1beta.ListAccountIssuesRequestC.google.shopping.merchant.accounts.v1beta.ListAccountIssuesResponse"<�Aparent���-+/accounts/v1beta/{parent=accounts/*}/issuesG�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentB�
,com.google.shopping.merchant.accounts.v1betaBAccountIssueProtoPZNcloud.google.com/go/shopping/merchant/accounts/apiv1beta/accountspb;accountspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

