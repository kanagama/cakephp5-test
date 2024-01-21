<?php

namespace App\Utility\Github\ValueObject\RateLimit;

use App\Utility\Github\ValueObject\RateLimit\ActionsRunnerRegistration;
use App\Utility\Github\ValueObject\RateLimit\AuditLog;
use App\Utility\Github\ValueObject\RateLimit\CodeScanningUpload;
use App\Utility\Github\ValueObject\RateLimit\CodeSearch;
use App\Utility\Github\ValueObject\RateLimit\Core;
use App\Utility\Github\ValueObject\RateLimit\DependencySnapshots;
use App\Utility\Github\ValueObject\RateLimit\Graphql;
use App\Utility\Github\ValueObject\RateLimit\IntegrationManifest;
use App\Utility\Github\ValueObject\RateLimit\Scim;
use App\Utility\Github\ValueObject\RateLimit\Search;
use App\Utility\Github\ValueObject\RateLimit\SourceImport;
use stdClass;

/**
 * @property-read ActionsRunnerRegistration $actionsRunnerRegistration
 * @property-read AuditLog $auditLog
 * @property-read CodeScanningUpload $codeScanningUpload
 * @property-read CodeSearch $codeSearch
 * @property-read Core $core
 * @property-read DependencySnapshots $dependencySnapshots
 * @property-read Graphql $graphql
 * @property-read IntegrationManifest $integrationManifest
 * @property-read Scim $scim
 * @property-read Search $search
 * @property-read SourceImport $sourceImport
 */
final class Resources
{
    /**
     * @var ActionsRunnerRegistration
     */
    public readonly ActionsRunnerRegistration $actionsRunnerRegistration;

    /**
     * @var AuditLog
     */
    public readonly AuditLog $auditLog;

    /**
     * @var CodeScanningUpload
     */
    public readonly CodeScanningUpload $codeScanningUpload;

    /**
     * @var CodeSearch
     */
    public readonly CodeSearch $codeSearch;

    /**
     * @var Core
     */
    public readonly Core $core;

    /**
     * @var DependencySnapshots
     */
    public readonly DependencySnapshots $dependencySnapshots;

    /**
     * @var Graphql
     */
    public readonly Graphql $graphql;

    /**
     * @var IntegrationManifest
     */
    public readonly IntegrationManifest $integrationManifest;

    /**
     * @var Scim
     */
    public readonly Scim $scim;

    /**
     * @var Search
     */
    public readonly Search $search;

    /**
     * @var SourceImport
     */
    public readonly SourceImport $sourceImport;

    /**
     * @param  stdClass  $resources
     */
    public function __construct(
        stdClass $resources
    ) {
        $this->actionsRunnerRegistration = new ActionsRunnerRegistration(
            $resources->actions_runner_registration->limit,
            $resources->actions_runner_registration->used,
            $resources->actions_runner_registration->remaining,
            $resources->actions_runner_registration->reset,
        );

        $this->auditLog = new AuditLog(
            $resources->audit_log->limit,
            $resources->audit_log->used,
            $resources->audit_log->remaining,
            $resources->audit_log->reset,
        );

        $this->codeScanningUpload = new CodeScanningUpload(
            $resources->code_scanning_upload->limit,
            $resources->code_scanning_upload->used,
            $resources->code_scanning_upload->remaining,
            $resources->code_scanning_upload->reset,
        );

        $this->codeSearch = new CodeSearch(
            $resources->code_search->limit,
            $resources->code_search->used,
            $resources->code_search->remaining,
            $resources->code_search->reset,
        );

        $this->core = new Core(
            $resources->core->limit,
            $resources->core->used,
            $resources->core->remaining,
            $resources->core->reset,
        );

        $this->dependencySnapshots = new DependencySnapshots(
            $resources->dependency_snapshots->limit,
            $resources->dependency_snapshots->used,
            $resources->dependency_snapshots->remaining,
            $resources->dependency_snapshots->reset,
        );

        $this->graphql = new Graphql(
            $resources->graphql->limit,
            $resources->graphql->used,
            $resources->graphql->remaining,
            $resources->graphql->reset,
        );

        $this->integrationManifest = new IntegrationManifest(
            $resources->integration_manifest->limit,
            $resources->integration_manifest->used,
            $resources->integration_manifest->remaining,
            $resources->integration_manifest->reset,
        );

        $this->scim = new Scim(
            $resources->scim->limit,
            $resources->scim->used,
            $resources->scim->remaining,
            $resources->scim->reset,
        );

        $this->search = new Search(
            $resources->search->limit,
            $resources->search->used,
            $resources->search->remaining,
            $resources->search->reset,
        );

        $this->sourceImport = new SourceImport(
            $resources->source_import->limit,
            $resources->source_import->used,
            $resources->source_import->remaining,
            $resources->source_import->reset,
        );
    }
}