CREATE TABLE cart (
	id bigint not null auto_increment,
    product_id int not null,
    quantity int not null,
    primary key(id),
    foreign key (product_id) references products(id) on delete CASCADE
);