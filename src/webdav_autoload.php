<?php
/**
 * Autoloader definition for the Webdav component.
 *
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package Webdav
 */

return array(
    'ezcWebdavException'                       => 'Webdav/exceptions/exception.php',
    'ezcWebdavBrokenRequestUriException'       => 'Webdav/exceptions/broken_request_uri.php',
    'ezcWebdavHeadersNotValidatedException'    => 'Webdav/exceptions/headers_not_validated.php',
    'ezcWebdavInvalidHeaderException'          => 'Webdav/exceptions/invalid_header.php',
    'ezcWebdavInvalidRequestBodyException'     => 'Webdav/exceptions/invalid_request_body.php',
    'ezcWebdavInvalidRequestMethodException'   => 'Webdav/exceptions/invalid_request_method.php',
    'ezcWebdavMissingHeaderException'          => 'Webdav/exceptions/missing_header.php',
    'ezcWebdavMissingServerVariableException'  => 'Webdav/exceptions/misssing_server_variable.php',
    'ezcWebdavNotTransportHandlerException'    => 'Webdav/exceptions/no_transport_handler.php',
    'ezcWebdavUnknownHeaderException'          => 'Webdav/exceptions/unknown_header.php',
    'ezcWebdavXmlBase'                         => 'Webdav/interfaces/xml_base.php',
    'ezcWebdavProperty'                        => 'Webdav/interfaces/property.php',
    'ezcWebdavBackend'                         => 'Webdav/interfaces/backend.php',
    'ezcWebdavBackendChange'                   => 'Webdav/interfaces/backend/change.php',
    'ezcWebdavBackendMakeCollection'           => 'Webdav/interfaces/backend/make_collection.php',
    'ezcWebdavBackendPut'                      => 'Webdav/interfaces/backend/put.php',
    'ezcWebdavLiveProperty'                    => 'Webdav/interfaces/property_live.php',
    'ezcWebdavResponse'                        => 'Webdav/interfaces/response.php',
    'ezcWebdavCopyResponse'                    => 'Webdav/response/copy.php',
    'ezcWebdavPropFindResponse'                => 'Webdav/response/propfind.php',
    'ezcWebdavPropertyStorage'                 => 'Webdav/property_storage.php',
    'ezcWebdavRequest'                         => 'Webdav/interfaces/request.php',
    'ezcWebdavSimpleBackend'                   => 'Webdav/backend/simple.php',
    'ezcWebdavSupportedLockPropertyLockentry'  => 'Webdav/properties/supportedlock_lockentry.php',
    'ezcWebdavCollection'                      => 'Webdav/structs/collection.php',
    'ezcWebdavCopyRequest'                     => 'Webdav/request/copy.php',
    'ezcWebdavCreationDateProperty'            => 'Webdav/properties/creationdate.php',
    'ezcWebdavDeadProperty'                    => 'Webdav/properties/dead.php',
    'ezcWebdavDeleteRequest'                   => 'Webdav/request/delete.php',
    'ezcWebdavDeleteResponse'                  => 'Webdav/response/delete.php',
    'ezcWebdavDisplayNameProperty'             => 'Webdav/properties/displayname.php',
    'ezcWebdavErrorResponse'                   => 'Webdav/response/error.php',
    'ezcWebdavFlaggedPropertyStorage'          => 'Webdav/property_storage_flagged.php',
    'ezcWebdavGetCollectionResponse'           => 'Webdav/response/get_collection.php',
    'ezcWebdavGetContentLanguageProperty'      => 'Webdav/properties/getcontentlanguage.php',
    'ezcWebdavGetContentLengthProperty'        => 'Webdav/properties/getcontentlength.php',
    'ezcWebdavGetContentTypeProperty'          => 'Webdav/properties/getcontenttype.php',
    'ezcWebdavGetEtagProperty'                 => 'Webdav/properties/getetag.php',
    'ezcWebdavGetLastModifiedProperty'         => 'Webdav/properties/getlastmodified.php',
    'ezcWebdavGetRequest'                      => 'Webdav/request/get.php',
    'ezcWebdavGetResourceResponse'             => 'Webdav/response/get_resource.php',
    'ezcWebdavHeadRequest'                     => 'Webdav/request/head.php',
    'ezcWebdavHeadResponse'                    => 'Webdav/response/head.php',
    'ezcWebdavLockDiscoveryProperty'           => 'Webdav/properties/lockdiscovery.php',
    'ezcWebdavLockDiscoveryPropertyActiveLock' => 'Webdav/properties/lockdiscovery_activelock.php',
    'ezcWebdavLockRequest'                     => 'Webdav/request/lock.php',
    'ezcWebdavMakeCollectionRequest'           => 'Webdav/request/mkcol.php',
    'ezcWebdavMakeCollectionResponse'          => 'Webdav/response/mkcol.php',
    'ezcWebdavMemoryBackend'                   => 'Webdav/backend/memory.php',
    'ezcWebdavMemoryBackendOptions'            => 'Webdav/options/backend_memory_options.php',
    'ezcWebdavMoveRequest'                     => 'Webdav/request/move.php',
    'ezcWebdavMoveResponse'                    => 'Webdav/response/move.php',
    'ezcWebdavMultistatusResponse'             => 'Webdav/response/multistatus.php',
    'ezcWebdavOptionsRequest'                  => 'Webdav/request/options.php',
    'ezcWebdavOptionsResponse'                 => 'Webdav/response/options.php',
    'ezcWebdavPathFactory'                     => 'Webdav/path_factory.php',
    'ezcWebdavPropFindRequest'                 => 'Webdav/request/propfind.php',
    'ezcWebdavPropPatchRequest'                => 'Webdav/request/proppatch.php',
    'ezcWebdavPropPatchResponse'               => 'Webdav/response/proppatch.php',
    'ezcWebdavPropStatResponse'                => 'Webdav/response/propstat.php',
    'ezcWebdavPutRequest'                      => 'Webdav/request/put.php',
    'ezcWebdavPutResponse'                     => 'Webdav/response/put.php',
    'ezcWebdavRequestLockInfoContent'          => 'Webdav/request/content/lock_info.php',
    'ezcWebdavRequestPropertyBehaviourContent' => 'Webdav/request/content/property_behaviour.php',
    'ezcWebdavResource'                        => 'Webdav/structs/resource.php',
    'ezcWebdavResourceTypeProperty'            => 'Webdav/properties/resourcetype.php',
    'ezcWebdavServer'                          => 'Webdav/server.php',
    'ezcWebdavServerOptions'                   => 'Webdav/options/server.php',
    'ezcWebdavSourceProperty'                  => 'Webdav/properties/source.php',
    'ezcWebdavSourcePropertyLink'              => 'Webdav/properties/source_link.php',
    'ezcWebdavSupportedLockProperty'           => 'Webdav/properties/supportedlock.php',
    'ezcWebdavTransport'                       => 'Webdav/transport.php',
);
?>
