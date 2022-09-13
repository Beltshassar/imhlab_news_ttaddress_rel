#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (

    ttaddress int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tt_address'
#
CREATE TABLE tt_address (

    news int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_imhlabnewsttaddressrel_news_ttaddress_mm'
#
CREATE TABLE tx_imhlabnewsttaddressrel_news_ttaddress_mm (

    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,
    sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)

);
