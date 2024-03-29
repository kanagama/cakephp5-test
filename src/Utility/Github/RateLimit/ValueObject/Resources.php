<?php
declare(strict_types=1);

namespace App\Utility\Github\RateLimit\ValueObject;

use stdClass;

/**
 * @property-read \App\Utility\Github\RateLimit\ValueObject\ActionsRunnerRegistration $actionsRunnerRegistration
 * @property-read \App\Utility\Github\RateLimit\ValueObject\AuditLog $auditLog
 * @property-read \App\Utility\Github\RateLimit\ValueObject\CodeScanningUpload $codeScanningUpload
 * @property-read \App\Utility\Github\RateLimit\ValueObject\CodeSearch $codeSearch
 * @property-read \App\Utility\Github\RateLimit\ValueObject\Core $core
 * @property-read \App\Utility\Github\RateLimit\ValueObject\DependencySnapshots $dependencySnapshots
 * @property-read \App\Utility\Github\RateLimit\ValueObject\Graphql $graphql
 * @property-read \App\Utility\Github\RateLimit\ValueObject\IntegrationManifest $integrationManifest
 * @property-read \App\Utility\Github\RateLimit\ValueObject\Scim $scim
 * @property-read \App\Utility\Github\RateLimit\ValueObject\Search $search
 * @property-read \App\Utility\Github\RateLimit\ValueObject\SourceImport $sourceImport
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class Resources
{
    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\ActionsRunnerRegistration
     */
    public readonly ActionsRunnerRegistration $actionsRunnerRegistration;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\AuditLog
     */
    public readonly AuditLog $auditLog;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\CodeScanningUpload
     */
    public readonly CodeScanningUpload $codeScanningUpload;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\CodeSearch
     */
    public readonly CodeSearch $codeSearch;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\Core
     */
    public readonly Core $core;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\DependencySnapshots
     */
    public readonly DependencySnapshots $dependencySnapshots;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\Graphql
     */
    public readonly Graphql $graphql;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\IntegrationManifest
     */
    public readonly IntegrationManifest $integrationManifest;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\Scim
     */
    public readonly Scim $scim;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\Search
     */
    public readonly Search $search;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\SourceImport
     */
    public readonly SourceImport $sourceImport;

    /**
     * @param \stdClass $resources
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
