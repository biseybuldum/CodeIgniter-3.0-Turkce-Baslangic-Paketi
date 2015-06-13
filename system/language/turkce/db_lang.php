<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Belirttiğiniz dize ile veritabanı bağlantısı sağlanamıyor.';
$lang['db_unable_to_connect'] = 'Belirlediğiniz ayarlarla veritabanı bağlantısı sağlanamıyor.';
$lang['db_unable_to_select'] = 'Belirttiğiniz veritabanı seçilemiyor: %s';
$lang['db_unable_to_create'] = 'Belirttiğiniz veritabanı yaratılamıyor: %s';
$lang['db_invalid_query'] = 'Gönderdiğiniz sorgu geçersiz.';
$lang['db_must_set_table'] = 'Sorgu için kullanılacak veritabanını ayarlamanız gerekmektedir.';
$lang['db_must_use_set'] = 'Bir giriyi güncellemek için "set" metodunu kullanmalısınız.';
$lang['db_must_use_index'] = 'Toplu güncelleme için bir dizin belirlemelisiniz.';
$lang['db_batch_missing_index'] = 'Toplu güncelleme için gönderdiğiniz bir ya da daha fazla satırda indeks eksik.';
$lang['db_must_use_where'] = '"Where" kullanılmayan güncelleme işlemlerine izin verilmiyor.';
$lang['db_del_must_use_where'] = '"Where" ya da "Like" kullanılmayan silme işlemlerine izin verilmiyor.';
$lang['db_field_param_missing'] = 'Veri çekmek için bir tablo adı değeri girmelisiniz.';
$lang['db_unsupported_function'] = 'Bu özellik, kullandığınız veritabanında mevcut değil.';
$lang['db_transaction_failure'] = 'İşlem hatası: İşlem geri alındı.';
$lang['db_unable_to_drop'] = 'Belirttiğiniz veritabanı kaldırılamıyor.';
$lang['db_unsupported_feature'] = 'Kullandığınız veritabanı platformunda bu özellik desteklenmiyor.';
$lang['db_unsupported_compression'] = 'Belirttiğiniz dosya sıkıştırma yöntemi, sunucunuz tarafından desteklenmiyor.';
$lang['db_filepath_error'] = 'Belirttiğiniz yola dosya yazılamıyor. Yazma izinlerini kontrol edin.';
$lang['db_invalid_cache_path'] = 'Belirttiğiniz önbellek yolu geçersiz ya da yazma izni yok.';
$lang['db_table_name_required'] = 'Bu işlem için bir tablo ismi gereklidir.';
$lang['db_column_name_required'] = 'Bu işlem için bir sütun ismi gereklidir.';
$lang['db_column_definition_required'] = 'Bu işlem için bir sütun tanımlamalısınız.';
$lang['db_unable_to_set_charset'] = 'İstemci bağlantı karakter seti şu şekilde ayarlanamadı: %s';
$lang['db_error_heading'] = 'Bir veritabanı hatası oluştu.';
