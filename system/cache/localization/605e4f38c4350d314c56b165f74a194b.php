<?php die('Restricted Access!'); ?>#AbanteCart#a:39:{s:28:"encryption_data_manager_name";s:23:"Encryption Data Manager";s:15:"text_extensions";s:10:"Extensions";s:24:"text_additional_settings";s:23:" Encryption Data Tools ";s:12:"entry_status";s:7:"Status:";s:16:"entry_sort_order";s:11:"Sort Order:";s:20:"button_generate_keys";s:17:"Generate Key Pair";s:19:"button_encrypt_data";s:12:"Encrypt Data";s:16:"error_permission";s:68:"Warning: You do not have permission to modify weight based shipping!";s:19:"error_duplicate_key";s:45:"Error: Selected key name pair already exists!";s:28:"encryption_data_manager_note";s:496:"  <b>This extension requires ADVANCED configuration and attention</b><br/> 
		  <b>Once enabled and data encrypted, there is NO undo and extension can not be disabled! </b><br/> 
		  This extension helps managing encryption keys creation and data migration from open to encrypted tables (initial migration)<br/> 
		  <b>PLEASE NOTE:</b> you need to have PHP with SSL Encryption  <b>ENABLED</b>
          <br/>
          <br/>To enable data encryption please read help instructions (HOW TO button)";s:22:"error_openssl_disabled";s:158:"Warning: OpenSSL for PHP is not available or not activated. You can not use encryption or this extension! <br> Check HELP for this extension for more details.";s:30:"error_data_encryption_disabled";s:167:"Warning: Data Encryption is not enabled on your AbanteCart. You can not encrypt/decrypt data using this extension! <br> Check HELP for this extension for more details.";s:20:"key_gen_section_name";s:17:"Generate Key Pair";s:15:"data_encryption";s:12:"Encrypt Data";s:27:"error_required_data_missing";s:60:"Missing required data field(s). Please check provided values";s:14:"entry_key_name";s:137:"Unique key pair name:<br /><span class="help">Name should not contain any spaces or special characters. Keeps it short and simple.</span>";s:16:"entry_key_length";s:176:"Key length (bits):<br /><span class="help">Specify key encryption bit length. Larger number represent stronger encryption, but can slower performance (Range 256 - 8192 )</span>";s:22:"entry_private_key_type";s:127:"Ecncryption type:<br /><span class="help">This is an encryption algorithm. Use default RSA if you are not advanced user.</span>";s:17:"entry_encrypt_key";s:205:"Enable password based key:<br /><span class="help">If enable, addtional passphrase will be required to decrypt text with use of private key. NOTE. This is not currently supported in data encryption.</span>";s:16:"entry_passphrase";s:131:"Passphrase or key password:<br /><span class="help">Remember the passphrase or key(s) will be useless and data might be lost</span>";s:20:"text_success_key_get";s:97:"<b>Key pair has been created. See keys below and keep them safe.</b> <br/><br/> %s <br/><br/> %s ";s:28:"error_generating_keys_failed";s:68:"Key pair generation failed. Check your settings and check error log.";s:13:"entry_enc_key";s:121:"Key pair name:<br /><span class="help">Select key to be used for encryption. IMPORTANT: Remember key that you used</span>";s:16:"entry_enc_tables";s:144:"Table(s) to encrypt:<br /><span class="help">Shown table(s) will be encryted with the key selected. Data can only be opened with this key</span>";s:19:"entry_enc_test_mode";s:85:"Test Mode:<br /><span class="help">Check first that all is OK to be encrepted.</span>";s:25:"entry_enc_remove_original";s:119:"Remove source data:<br /><span class="help">Remove source un-encrepted data records after encryption is complete</span>";s:23:"text_success_encrypting";s:233:"<b>Data has been encrypted. <br />  See details:</b> <br/><br/> %s <br /><br /> <b>If you want this key to be used for new data encryption, add following line to file system/config.php : define('DATA_ENCRYPTION_KEYPAIR', '%s'); </b> ";s:20:"text_encryption_test";s:90:"<b>Data encryption test result</b> Check error log for any possible errors! <br/><br/> %s ";s:16:"error_encrypting";s:64:"Data encryption failed. Check your settings and check error log.";s:22:"post_encrypting_notice";s:420:"<b>Important notes! After encryption is completed data will be copied to mirror tables with data encrypted in them. 
    		<br />Follow instructions to add configuration to system/config.php for AbanteCart to switch read/write operations to encrypted tables. </b><br /> Add following line to configuration file: define('DATA_ENCRYPTION_KEYPAIR', 'your_key_name'); <br> This will be default key for read/write operations ";s:16:"encryption_usage";s:16:"Encryption Usage";s:24:"text_unencrepted_records";s:25:"Un-encrypted data records";s:22:"warn_encrypt_open_data";s:45:"Use 'Encrypt Data' Tab for initial encryption";s:22:"text_encrepted_records";s:22:"Encrypted data records";s:25:"text_usage_heading_key_id";s:6:"Key ID";s:27:"text_usage_heading_key_name";s:8:"Key Name";s:29:"text_usage_heading_key_tables";s:22:"Encrypted Tables Usage";s:29:"text_usage_heading_key_rotate";s:37:"Rotate (change) Encryption to new key";s:18:"text_usage_records";s:9:"record(s)";}