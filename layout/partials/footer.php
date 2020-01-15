<?php
/*
 * This file is part of Totara LMS
 *
 * Copyright (C) 2016 onwards Totara Learning Solutions LTD
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright 2016 onwards Totara Learning Solutions LTD
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package   theme_edpearson
 */

defined('MOODLE_INTERNAL') || die();

?>
<footer id="page-footer" class="page-footer">
    <div class="container page-footer-main-content">        
    <div class="row">
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
    </div>
    <div class="row">
    <div class="col-sm-4">
        <div class="footer-logo"></div>
    </div>    
    <div class="col-sm-4">
        <ul class="list-unstyled list-inline social-network">
            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#"><span class="fa fa-youtube"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
        </ul>
    </div>
    <div class="col-sm-4">
        <ul class="list-unstyled list-inline text-right footer-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Use</a></li>
        </ul>
        <?php
            if (!empty($PAGE->theme->settings->footnote)) {
                echo '<div class="footnote text-right">'.format_text($PAGE->theme->settings->footnote).'</div>';
            } else {
                echo '<div class="footnote text-right"> &copy; Pearson. All rights reserved except where noted. </div>';
            }
        ?>
    </div>
    </div>
        <div class="row">
            <?php echo $OUTPUT->standard_footer_html(); ?>
        </div>
    </div>
</footer>
