using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.EventSystems;

public class Garbage : MonoBehaviour
{
    public void OnGarbageIconClicked(float weight)
    {
        // Get the object we are clicking on and call the Add() function 
        // from it's script
        GameObject obj = EventSystem.current.currentSelectedGameObject;
        obj.GetComponent<GarbageItem>().Add();

        GameManager.instance.UpdateWeightAndQuantityData(weight);
    }

    public void OnGarbageIconClicked1(int Qty1)
    {

        GameManager.instance.UpdateQtyData1(Qty1);
    }

    public void OnGarbageIconClicked2(int Qty2)
    {

        GameManager.instance.UpdateQtyData2(Qty2);
    }

    public void OnGarbageIconClicked3(int Qty3)
    {

        GameManager.instance.UpdateQtyData3(Qty3);
    }

    public void OnGarbageIconClicked4(int Qty4)
    {

        GameManager.instance.UpdateQtyData4(Qty4);
    }

    public void OnGarbageIconClicked5(int Qty5)
    {

        GameManager.instance.UpdateQtyData5(Qty5);
    }

    public void OnGarbageIconClicked6(int Qty6)
    {

        GameManager.instance.UpdateQtyData6(Qty6);
    }

    public void OnGarbageIconClicked7(int Qty7)
    {

        GameManager.instance.UpdateQtyData7(Qty7);
    }

    public void OnGarbageIconClicked8(int Qty8)
    {

        GameManager.instance.UpdateQtyData8(Qty8);
    }

    public void OnGarbageIconClicked9(int Qty9)
    {

        GameManager.instance.UpdateQtyData9(Qty9);
    }

    public void OnGarbageIconClicked10(int Qty10)
    {

        GameManager.instance.UpdateQtyData10(Qty10);
    }

    public void OnGarbageIconClicked11(int Qty11)
    {

        GameManager.instance.UpdateQtyData11(Qty11);
    }

    public void OnGarbageIconClicked12(int Qty12)
    {

        GameManager.instance.UpdateQtyData12(Qty12);
    }

    public void OnGarbageIconClicked13(int Qty13)
    {

        GameManager.instance.UpdateQtyData13(Qty13);
    }

    public void OnGarbageIconClicked14(int Qty14)
    {

        GameManager.instance.UpdateQtyData14(Qty14);
    }

    public void OnGarbageIconClicked15(int Qty15)
    {

        GameManager.instance.UpdateQtyData15(Qty15);
    }

    public void OnGarbageIconClicked16(int Qty16)
    {

        GameManager.instance.UpdateQtyData16(Qty16);
    }

    public void OnGarbageIconClicked17(int Qty17)
    {

        GameManager.instance.UpdateQtyData17(Qty17);
    }

    public void OnGarbageIconClicked18(int Qty18)
    {

        GameManager.instance.UpdateQtyData18(Qty18);
    }

    public void OnGarbageIconClicked19(int Qty19)
    {

        GameManager.instance.UpdateQtyData19(Qty19);
    }

    public void OnGarbageIconClicked20(int Qty20)
    {

        GameManager.instance.UpdateQtyData20(Qty20);
    }

    public void OnGarbageIconClicked21(int Qty21)
    {

        GameManager.instance.UpdateQtyData21(Qty21);
    }

    public void OnGarbageIconClicked22(int Qty22)
    {

        GameManager.instance.UpdateQtyData22(Qty22);
    }

    public void OnGarbageIconClicked23(int Qty23)
    {

        GameManager.instance.UpdateQtyData23(Qty23);
    }

    public void OnGarbageIconClicked24(int Qty24)
    {

        GameManager.instance.UpdateQtyData24(Qty24);
    }

    public void OnGarbageIconClicked25(int Qty25)
    {

        GameManager.instance.UpdateQtyData25(Qty25);
    }

}
