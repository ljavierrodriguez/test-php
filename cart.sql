CREATE TABLE cart (
	id bigint not null auto_increment,
    product_id int not null,
    user_id int not null,
    quantity int not null,
    primary key(id),
    foreign key (user_id) references users(id) on delete CASCADE,
    foreign key (product_id) references products(id) on delete CASCADE
);