package order.dao;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import order.beans.Order;

public class OrderDao {

    JdbcTemplate template;

    public void setTemplate(JdbcTemplate template) {
        this.template = template;
    }

    //Save the order details in to the Data Base
    public int save(Order p) {
        String sql = "insert into online_order(carno,park_lot_no,car_type,sys_time) values(" + p.getOrderno() + ",(select min(park_lot_no)from order_track where occupied='N' and car_type='" + p.getType() + "'),'" + p.getType() + "',systimestamp)";
        return template.update(sql);
    }

    //Retrieving the order details
    public int check(Order p) {
        String sql = "select * from online_order where park_lot_no=" + p.getOrderno() + "";
        return template.update(sql);
    }

    //Deleting the order details
    public int delete(Order p) {
        String sql = "delete from online_order where carno=" + p.getOrderno() + "";
        return template.update(sql);
    }

    //Generating the Bill
    public List<Order> getOrdercheckout(Order p) {
        return template.query("select case when car_type='L' then 40 when car_type='M' then 30 when car_type='S' then 20 end amount ,carno from online_order where park_lot_no=" + p.getOrderno(), new RowMapper<Order>() {
            public Order mapRow(ResultSet rs, int row) throws SQLException {
                Order e = new Order();
                int hours = rs.getInt(2);
                int amount = rs.getInt(1);
                int total = 0;
                total = hours * amount;
                e.setOrderno(hours);
                e.setPark_lot_no(total);
                return e;
            }
        });
    }

    //Get the Order details
    public List<Order> getOrderDetails() {
        return template.query("select carno,park_lot_no from online_order where sys_time in (select max(sys_time) from online_order)", new RowMapper<Order>() {
            public Order mapRow(ResultSet rs, int row) throws SQLException {
                Order e = new Order();
                e.setOrderno(rs.getInt(1));
                e.setPark_lot_no(rs.getInt(2));
                return e;
            }
        });
    }
}
