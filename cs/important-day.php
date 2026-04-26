<?php
/*
PHP function - Important Day with translation
Author: Lukas Elner
E-mail: lukas@elner.cz
Web: lukaselner.cz
Version: CZECH
Revision: 0.4

Copyright (C) 2026 Lukas Elner
Licensed under GNU GPL v3.0 — see LICENSE file or <https://www.gnu.org/licenses/gpl-3.0.html>
*/
function importantDay($day_d) {
	$date = date_create($day_d);
	if ($date === false) {
		return false;
	}
	$days = ['Mon' => 'Pondělí', 'Tue' => 'Úterý', 'Wed' => 'Středa', 'Thu' => 'Čtvrtek', 'Fri' => 'Pátek', 'Sat' => 'Sobota', 'Sun' => 'Neděle'];
	$months = ['Jan' => 'ledna', 'Feb' => 'února', 'Mar' => 'března', 'Apr' => 'dubna', 'May' => 'května', 'Jun' => 'června', 'Jul' => 'července', 'Aug' => 'srpna', 'Sep' => 'září', 'Oct' => 'října', 'Nov' => 'listopadu', 'Dec' => 'prosince'];
	return $days[$date->format('D')] . ', ' . $date->format('j') . '. ' . $months[$date->format('M')] . ' ' . $date->format('Y');
}
echo importantDay('1970-01-01');
?>
