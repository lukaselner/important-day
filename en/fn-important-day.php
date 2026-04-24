<?php
/*
PHP function - Important Days with translation
Author: Lukas Elner
E-mail: lukas@elner.cz
Web: lukaselner.cz
Version: ENGLISH
Revision: 0.4

Copyright (C) 2026 Lukas Elner
Licensed under GNU GPL v3.0 — see LICENSE file or <https://www.gnu.org/licenses/gpl-3.0.html>
*/
function importantDay($day_d) {
	$date = date_create($day_d);
	if ($date === false) {
		return false;
	}
	$days = ['Mon' => 'Monday', 'Tue' => 'Tuesday', 'Wed' => 'Wednesday', 'Thu' => 'Thursday', 'Fri' => 'Friday', 'Sat' => 'Saturday', 'Sun' => 'Sunday'];
	$months = ['Jan' => 'January', 'Feb' => 'February', 'Mar' => 'March', 'Apr' => 'April', 'May' => 'May', 'Jun' => 'June', 'Jul' => 'July', 'Aug' => 'August', 'Sep' => 'September', 'Oct' => 'October', 'Nov' => 'November', 'Dec' => 'December'];
	return $days[$date->format('D')] . ', ' . $months[$date->format('M')] . ' ' . $date->format('j') . ', ' . $date->format('Y');
}
echo importantDay('1970-01-01');
?>
