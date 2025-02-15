<?php
/**
 * ownCloud - ocDownloader
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the LICENSE file.
 *
 * @author Xavier Beurois <www.sgc-univ.net>
 * @copyright Xavier Beurois 2015
 */

namespace OCA\ocDownloader\AppInfo;

\OC::$server->getNavigationManager()->add([
    'id' => 'ocdownloader',
    'order' => 10,
    'href' => \OC::$server->getURLGenerator()->linkToRoute('ocdownloader.Index.Add'),
    'icon' => \OC::$server->getURLGenerator()->imagePath('ocdownloader', 'ocdownloader.svg'),
    'name' => \OC::$server->getL10N('ocdownloader')->t('ocDownloader')
]);
