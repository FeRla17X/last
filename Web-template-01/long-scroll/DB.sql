CREATE TABLE users(
	id int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Username varchar(256) NOT NULL,
    Password varchar(256) NOT NULL,
    Log_in_time datetime NOT NULL,
    Permission int(1) NOT NULL
);
insert into users(Username,Password) VALUES('admin','admin');



	create table product(
		id int(255) not null AUTO_INCREMENT PRIMARY KEY,
	    title varchar(256) not null,
	    price int(11) not null,
	    img_dir varchar(256) not null,
		description varchar(256) not null,
	    category varchar(256) not null,
	    priorety int(1) not null,
	    instock int(255) not null,
	    rates int(1) not  null,
	    sale int(2) not null


	);

	insert into product(title,price,instock,rates,description,category,priorety) VALUES('winda','8','1','4','ar ixeva','windebi','0');

	insert into product(title,price,instock,rates,description,category,priorety) VALUES('winda','8','1','4','ar ixeva','windebi','0');

	insert into product(title,price,instock,rates,description,category,priorety) VALUES('qudi','2','1','8','ar ixeva','qudebi','0');

	insert into product(title,price,instock,rates,description,category,priorety) VALUES('sharvali','18','1','10','ar ixeva','sharvlebi','0');

	insert into product(title,price,instock,rates,description,category,priorety) VALUES('maika','28','1','4','ar ixeva','maikebi','0');


	create table category(
	    id int(255) not null PRIMARY KEY AUTO_INCREMENT,
	    category varchar(256) not null,
        sold int(255) not null,
        color varchar(256) not null,
		category_section varchar(256) not null
	    );
	insert into category(category,category_section,color,sold) VALUES('qudi','qali','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('perangi','qali','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('maisuri','qali','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('sharvali','qali','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('winda','qali','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('fexsacmeli','qali','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('aqsesuari','qali','aqua','0');


	insert into category(category,category_section,color,sold) VALUES('qudi','kaci','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('perangi','kaci','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('maisuri','kaci','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('sharvali','kaci','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('winda','kaci','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('pexsacmeli','kaci','aqua','0');
	insert into category(category,category_section,color,sold) VALUES('aqsesuari','kaci','aqua','0');

		create table analytics(
		    id int(255) not null PRIMARY KEY AUTO_INCREMENT,
		  	sold_d int(255) not null,
		    sold_m int(255) not null,
		    sold_y int(255) not null,
		    category varchar(256) not null,
		    sold_items int(255) not null
		);

		create table customize_page(
		id int(255) not null PRIMARY KEY AUTO_INCREMENT,
	    banner varchar(256) not null,
	    banner_text varchar(256) not null,
		carousel_quant int(255) not null,
		carousel_post int(255) not null,
	    location varchar(255) not null,
		about_pic_dir varchar(256) not null,
		about_text varchar(256) not null,
		about_mobile varchar(256) not null,
		about_mail varchar(256) not null,
		about_location varchar(256) not null,
		about_fb_link varchar(256) not null,
		about_inst_link varchar(256) not null,
		about_twitter_link varchar(256) not null
	);


	create table mail(
    id int(255) not null PRIMARY KEY AUTO_INCREMENT,
    name varchar(256) not null,
	email varchar(256) not null,
	description varchar(1000) not null,
	mail_date datetime);

	create table search_history(
    id int(255) not null PRIMARY KEY AUTO_INCREMENT,
    search_words varchar(256) not null);


		CREATE TABLE carousel(
			id int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		    product_id varchar(256) NOT NULL
		);
