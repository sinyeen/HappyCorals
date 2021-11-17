using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using TMPro;
using UnityEngine.SceneManagement;

public class UIHandler : MonoBehaviour
{
    public Button nextBtn, startBtn, doneBtn, next2Btn, next3Btn, home;
    public GameObject howToPlay, userDetails, garbageData, badge, certificate, leaderboard;
    public TMP_InputField locationField, playerNameField,  dateField;
    public Certificate certificateReference;
    private void Start()
    {
        // Assigning the onClick events to the respective buttons
        // This will ensure that the function is executed when the button is pressed
        // NOTE: Every statement in any script which goes like Setactive(true) or Setactive(false) basically
        // means enabling or disabling that particular gameobject on the screen
        nextBtn.onClick.AddListener(Next);
        next2Btn.onClick.AddListener(Next2);
        next3Btn.onClick.AddListener(Next3);
        home.onClick.AddListener(Home);
        startBtn.onClick.AddListener(StartGame);
        doneBtn.onClick.AddListener(Done);
        howToPlay.SetActive(true);
    }
    private void Next()
    {
        howToPlay.SetActive(false);
        userDetails.SetActive(true);
    }
    private void StartGame()
    {
        SaveUserDetails();
        userDetails.SetActive(false);
        garbageData.SetActive(true);
    }
    private void Done()
    {
        garbageData.SetActive(false);
        badge.SetActive(true);
    }
    private void Next2()
    {
        badge.SetActive(false);
        certificate.SetActive(true);
        certificateReference.totalWeight.text = "Total Estimated Weight: " + GameManager.instance.totalWeight + " g";
    }
    private void Next3()
    {
        certificate.SetActive(false);

        // Update the database with player's information
        // This will be reflected in the leaderboard when a new game session begins
        DatabaseHandler.instance.UpdateUserDatabase(GameManager.instance.playerName, GameManager.instance.totalQuantity, GameManager.instance.totalQty1, GameManager.instance.totalQty2, GameManager.instance.totalQty3, GameManager.instance.totalQty4, GameManager.instance.totalQty5, GameManager.instance.totalQty6, GameManager.instance.totalQty7, GameManager.instance.totalQty8, GameManager.instance.totalQty9, GameManager.instance.totalQty10, GameManager.instance.totalQty11, GameManager.instance.totalQty12, GameManager.instance.totalQty13, GameManager.instance.totalQty14, GameManager.instance.totalQty15, GameManager.instance.totalQty16, GameManager.instance.totalQty17, GameManager.instance.totalQty18, GameManager.instance.totalQty19, GameManager.instance.totalQty20, GameManager.instance.totalQty21, GameManager.instance.totalQty22, GameManager.instance.totalQty23, GameManager.instance.totalQty24, GameManager.instance.totalQty25);

        // Get all data from database and fill up the leaderboard with it
        DatabaseHandler.instance.GetAllData();
        leaderboard.SetActive(true);
    }
    private void Home()
    {
        SceneManager.LoadScene(0);
    }
    private void SaveUserDetails()
    {
        // Saving the user details so that they can be used in the certificate
        // Also updating the certificate details at the same time
        GameManager.instance.playerName = playerNameField.text;
        certificateReference.nameTxt.text = "Name: " + playerNameField.text;

        GameManager.instance.location = locationField.text;
        certificateReference.dateTxt.text = "Date: " + dateField.text;

        GameManager.instance.date = dateField.text;
        certificateReference.locationTxt.text = "Location: " + locationField.text;
    }
}
