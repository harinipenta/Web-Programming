package order.beans;

public class Order {

    private int orderno;
    private int park_lot_no;
    private String type;

    //setting the order quantity
    public void setOrderno(int orderno) {
        this.orderno = orderno;
    }

    //getting the order quantity
    public int getOrderno() {
        return orderno;
    }

    //setting the order Number
    public void setPark_lot_no(int park_lot_no) {
        this.park_lot_no = park_lot_no;
    }

    //setting the order Number
    public int getPark_lot_no() {
        return park_lot_no;
    }

    //setting the order Type
    public String getType() {
        return type;
    }

    //getting the order Type
    public void setType(String type) {
        this.type = type;
    }
}
