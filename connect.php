<?php
use Google\Cloud\Firestore\FirestoreClient;
function setup_client_create(string $projectId = null)
{
    // Create the Cloud Firestore client
    if (empty($projectId)) {
        $db = new FirestoreClient();
        printf('Created Cloud Firestore client with default project ID.' . PHP_EOL);
    } else {
        $db = new FirestoreClient([
            'projectId' => $projectId,
        ]);
        printf('Created Cloud Firestore client with project ID: %s' . PHP_EOL, $projectId);
    }
}
